from graphics.circle import *
from graphics import rectangle
from graphics.graphics_3d.cuboid import *
from graphics.graphics_3d.sphere import *



r=float(input("enter the radius of circle: "))
print("Area of given circle is:", area_circle(r))
print("Perimeter of given circle is:", peri_circle(r))
 

l=int(input("enter the length of rectangle: "))
b=int(input("enter the breadth of rectangle: "))
print("Perimeter of given rectangle is:",rectangle.peri_rect(l,b))
print("Area of given rectangle is:",rectangle.area_rect(l,b))



area_cuboid()
volume_cuboid()

area_sphere()
volume_sphere()


