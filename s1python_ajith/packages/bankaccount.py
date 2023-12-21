class account:
	def __init__(self,accno="",accname="",acctp="",bal=0):
		self.accno=accno
		self.accname=accname
		self.acctype=acctp
		self.balance=bal
	def withdraw(self,amount):
		if self.balance<amount:
			print("You have no sufficient balance")
		else:
			self.balance=self.balance-amount
			print("\n The details of withdraw: ")
			acc.display()
	def deposit(self,amount):
		self.balance=self.balance+amount
	def display(self):
		print("\n Account Number: :",self.accno)
		print("\n Account Name: :",self.accname)
		print("\n Account Type: :",self.acctype)
		print("\n Account Balance: :",self.balance)

name= input("Enter the name of account holder: ")
num= input("Enter the account number: ")
bal= int(input("Enter the account balance: "))
typ= input("Enter the account type: ")
acc=account(num,name,typ,bal)
print("Choose any operations given below")
print("--------------------------------\n1.Deposit\n 2.Withdraw \n 3.Display\n 4.Exit")
while 1:
	ch=int(input("\n Enter one of the operations: "))
	if ch==1:
		am=int(input("Enter the amount to be deposited: "))
		acc.deposit(am)
		print("\n The details of deposit is: ")
		acc.display()
	elif ch==2:
		am=int(input("Enter the amount to withdraw: "))
		acc.withdraw(am)
		
	elif ch==3:
		print("\n Thw account detaila are: ")
		acc.display()
	elif ch==4:
		exit()
else:
	print("Not avalid choice")

