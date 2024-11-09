<x-layout title="Student information">




    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Stripe Payment</title>
        <script src="https://js.stripe.com/v3/"></script>
        <!-- Tailwind CSS (CDN) -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <div class="bg-gray-100">

        <div class="min-h-screen flex items-center justify-center py-6 px-4 sm:px-6 lg:px-8">
            <div class="max-w-md w-full space-y-8 bg-white p-8 rounded-lg shadow-lg">
                <h1 class="text-3xl font-bold text-center text-gray-900">Stripe Payment</h1>

                @if (session('success_message'))
                    <div class="text-green-500 text-center my-4">
                        <p>{{ session('success_message') }}</p>
                    </div>
                @endif

                @if (session('error_message'))
                    <div class="text-red-500 text-center my-4">
                        <p>{{ session('error_message') }}</p>
                    </div>
                @endif

                <form action="{{ route('payment.process') }}" method="POST" id="payment-form" class="space-y-4">
                    @csrf

                    <div>

                        <input type="text" name="id" value="{{ $profile->id }}"
                            class="input input-bordered block w-full hidden">
                    </div>
                    <div class="space-y-2">
                        <label for="card-element" class="text-lg text-gray-700 font-medium">Credit or Debit Card</label>
                        <div id="card-element" class="p-4 border border-gray-300 rounded-md shadow-sm">
                            <!-- A Stripe Element will be inserted here. -->
                        </div>
                        <!-- Used to display form errors. -->
                        <div id="card-errors" role="alert" class="text-red-500 text-sm mt-2"></div>
                    </div>

                    <button type="submit"
                        class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md shadow-md transition duration-200">
                        Submit Payment
                    </button>
                </form>
            </div>
        </div>

        <script>
            var stripe = Stripe('{{ env('STRIPE_KEY') }}');
            var elements = stripe.elements();
            var style = {
                base: {
                    color: '#32325d',
                    lineHeight: '24px',
                    fontFamily: 'Helvetica, Arial, sans-serif',
                    fontSmoothing: 'antialiased',
                    fontSize: '16px',
                    '::placeholder': {
                        color: '#aab7c4'
                    }
                },
                invalid: {
                    color: '#fa755a',
                    iconColor: '#fa755a'
                }
            };

            var card = elements.create('card', {
                style: style
            });
            card.mount('#card-element');

            card.on('change', function(event) {
                var displayError = document.getElementById('card-errors');
                if (event.error) {
                    displayError.textContent = event.error.message;
                } else {
                    displayError.textContent = '';
                }
            });

            var form = document.getElementById('payment-form');
            form.addEventListener('submit', function(event) {
                event.preventDefault();

                stripe.createToken(card).then(function(result) {
                    if (result.error) {
                        var errorElement = document.getElementById('card-errors');
                        errorElement.textContent = result.error.message;
                    } else {
                        var token = result.token;
                        var hiddenInput = document.createElement('input');
                        hiddenInput.setAttribute('type', 'hidden');
                        hiddenInput.setAttribute('name', 'stripeToken');
                        hiddenInput.setAttribute('value', token.id);
                        form.appendChild(hiddenInput);
                        form.submit();
                    }
                });
            });
        </script>

    </div>


</x-layout>
