
from BankTransferInterface import BankTransferInterface
from PaymentInterface import PaymentInterface


class BankTransfer(PaymentInterface, BankTransferInterface):

    def __init__(self):
        pass


    def pay(self) -> bool:
        # code for bank transfer
        self.createSlip()
        print("Bank transfer done")
        return True

    '''
        createSlip is not needed in Stripe and Paypal so why to enforce it
        Simply create a separate bank transfer interface
    '''

    def createSlip(self):
        # code for generating payment slip
        print("Payment slip created")