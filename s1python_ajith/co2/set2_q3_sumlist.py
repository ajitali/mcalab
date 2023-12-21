def sum3(n):
	l1=[]
	for i in range(0,n):
		ele=int(input())
		l1.append(ele)
		print(l1)
	print("sum of elemnts in the list: ",sum(l1))
sum3(int(input("enter the limit: ")))
