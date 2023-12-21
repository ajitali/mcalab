l1=[]
n=int(input("Enter number of elements in list1: "))
for i in range(0,n):
	num1=int(input())
	l1.append(num1)

l2=[]
m=int(input("Enter number of elements in list1: "))
for i in range(0,m):
	num2=int(input())
	l2.append(num2)

print(l1)
print(l2)

if len(l1)==len(l2):
	print("length of two list are same and is equal to: "+ str(len(l1)))
else:
	print("lenghts are not same")

if sum(l1)==sum(l2):
	print("sum of two lists are same and is equal to: "+str(sum(l1)))
else:
	print("sum is not same")

common=[]
for i in range(len(l1)):
	if l1[i] in l2:
		common.append(l1[i])
if len(common)>0:
	print("there are common elements",str(common))
else:
	print("no common elements")
