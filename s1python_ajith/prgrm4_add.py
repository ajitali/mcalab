print("enter 2 numbers: ")
x=int(input("enter number 1: "))
y=int(input("enter number 2: "))
print("1.Addition\n2.Subtraction\n3.Division\n4.Multiplication")
z=int(input("enter your choice: "))
if z==1:
	res=x+y
	print("sum of 2 numbers=",res)

elif z==2:
	res=x-y
	print("difference of 2 numbers=",res)

elif z==3:
	res=x%y
	print("quotient of 2 numbers=",res)

elif z==4:
	res=x*y
	print("product of 2 numbers=",res)

else:
	print("invalid choice")
