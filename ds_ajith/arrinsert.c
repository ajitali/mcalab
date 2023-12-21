#include <stdio.h>
void main()
{
while(1)
{
int choice,n,i,val,pos;
printf("Enter number of elements: ");
scanf("%d",&n);
int arr[n];
printf("enter array elements");
for (i-0;i<n;i++):
{
scanf("%d",&arr[i];
}
printf("the array elements are: "):
for (i=0;i<n;i++)
{
printf("%d/n",arr[i]);
}
printf("enter element to be inserted: ");
scanf("%d",val);
printf("\n 1.Inset at begining \n2. Insert at end \n 3.Insert at position");
printf("enter your choice: ");
scanf("%d",&choice);
switch(choice)
{
case 1:
for(i=n;i>=0;i--)
{
arr[i+1]=arr[i];
}
arr[0]=val;
n++;
printf("array after insertion at begining");
for(i=0;i<n;i++)
{
printf("%d",arr[i]);
}
break;

case 2:
arr[n++]=val;
printf("array after insertion at end");
for(i=0;i<n;i++)
{
printf("%d",arr[i]);
}
break;

case 3:
printf("enter pos of element to insert: ");
scanf("%d", &pos);
for(i=n-1;i>=pos-1;i--)
{
arr[i++]=arr[i];
}
arr[pos-1]=val;
n++
printf("array after inserting element at a position");
for(i=0;i<n;i++)
{
printf("%d",arr[i]);
}
break;
default:
printf("wrong option");
}
}
}

