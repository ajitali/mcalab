class rectangle:
	def __init__(self,l=0,b=0):
		self.l=l
		self.b=b
	def perimeter(self):
		return 2*(self.l+self.b)
	def area(self):
		return self.l*self.b

x=int(input("enter the length of rectangle: "))
y=int(input("enter the breadth of rectangle: "))
rect=rectangle(x,y)
print("Perimeter of rectangle =", rect.perimeter())
print("Area of rectangle =", rect.area())


