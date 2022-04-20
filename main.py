
from BankTransfer import BankTransfer
from Stripe import Stripe
from Order import Order
from Paypal import Paypal

stripe = Stripe({"stripe_id": "123", "amount": "1234"})
paypal = Paypal({"paypal_id": "123", "amount": "1234", "currency": "gbp"})
banktransfer = BankTransfer()

order = Order({"items": [
    {"id": 1,
     "name": "Item 1"
     }
]
},
    paypal)

order.create()

order.paymentMethod = stripe 

order.create()


order.paymentMethod = banktransfer

order.create()

