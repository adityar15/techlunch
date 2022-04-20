
from PaymentInterface import PaymentInterface

class Stripe(PaymentInterface):

    def __init__(self, payload):
        self.payload = payload

    
    def pay(self) -> bool:

        # stripe payment process code
        
        print("Stripe payment successful")
        return True
