choice= int(input("Enter 1 for square, 2 for rectangle and 3 for triangle \n"))
if choice == 1:
	area = lambda x: x * x
	print("Area of square: ",area(int (input("side: ")))) 
elif choice == 2:
	area = lambda x, y: x * y
	print("Area of rectangle: ",area(int (input("length: ")), int(input("breadth: ")))) 
elif choice == 3:
	area = lambda b, h: (1/2) * b* h
	print("Area of triangle: ",area(int (input("base: ")), int(input("height: ")))) 
else:
	print("invalid choice")
