
from abc import ABC, abstractmethod

class BankTransferInterface(ABC):
    @abstractmethod
    def createSlip(self):
        pass