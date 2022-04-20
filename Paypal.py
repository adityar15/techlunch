
from PaymentInterface import PaymentInterface



class Paypal(PaymentInterface):

    def __init__(self, payload):
        self.payload = payload

    
    def pay(self) -> bool:

        # paypal payment process code
        
        print("Paypal payment successful")

        return True
        