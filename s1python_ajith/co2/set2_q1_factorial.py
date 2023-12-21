def fact(n):
	fact=1
	for i in range(1,n+1):
		fact=fact*i
		i+=1
	print("factorial: ",fact)
fact(int(input("enter a number: ")))
