def maxlen(n):
	l1=[]
	for i in range(0,n):
		ele=input()
		l1.append(ele)
	print(l1)
	s=max(l1,key=len)
	print("longest word is: ",s)
	print("length of longest word:" ,len(s))
maxlen(int(input("enter limit of list: ")))
