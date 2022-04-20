from PaymentInterface import PaymentInterface

class Order:

    '''
        PaymentInterface can be substituted with its child classes like Stripe, Paypal, or any other online payment method
        Just need to make sure that the Child class do not alter the Parent's behaviour.
    '''

    def __init__(self, payload, paymentMethod: PaymentInterface):
        self.payload = payload
        self.paymentMethod = paymentMethod

    '''
    1. Process payment
    2. Process order
    3. Handle Errors
    4. If all cool, proceed
    '''

    def create(self):
        self.paymentMethod.pay()
        # order process code
        print("order successful")
