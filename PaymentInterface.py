

from abc import abstractmethod

from abc import abstractmethod, ABC


'''
We can use an abstract base class to define and enforce an interface.
'''

class PaymentInterface(ABC):

   @abstractmethod
   def pay(self) -> bool:
       pass