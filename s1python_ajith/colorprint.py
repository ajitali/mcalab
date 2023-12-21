l1=[]
n=int(input("Enter limit of colors: "))
for i in range(0,n):
	a=input()
	l1.append(a)


l2=[]
m=int(input("Enter limit of colors: "))
for i in range(0,m):
	b=input()
	l2.append(b)
print("list1:",l1)
print("list2:",l2)

p=set(l1)
q=set(l2)
print("colors only in list1 not in list2:",(p-q))
