def fib(n):
	k=0
	m=1
	sum=0
	for i in range(0,n):
		print(k)
		sum=k+m
		k=m
		m=sum
		i+=1
	#print("sum of fibonacci series: ",sum)
fib(int(input("enter the limit: ")))
