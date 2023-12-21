start= int(input("Enter the start year: "))
end= int(input("Enter the end year: "))
if start>=end:
	print("check your input year again!!!")
else:
	print("list of leap years between " + str(start) + " and " + str(end) +":")
	while start<end:
		if start%4==0 and start%100!=0:
			print(start)
		if start%100==0 and start%400==0:
			print(start)
		start+=1

