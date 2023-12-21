#include<stdio.h>
int deq();
void enq(int a);
void display();
int front=rear=-1;
void main()
{
int op,m,n,size;
printf("enter size of queue");
scanf("%d",&size);
int queue[size];
while(1)
{
printf("\n choose operation \n1.Enqueue\n2.Dequeue\n3.Display\n4.Exit\n");
printf("enter your choice of operations:");
scanf("%d",&op);
switch(op)
 {
  case 1:
       if(front==(rear+1)%size)
         printf("\n queue overflow");
       else{
          printf("\n enter element to be enqued:");
          scanf("%d",&m);
          enq(m);
          }
        break;
 case 2:
       if(front==-1&&rear==-1)
         printf("\n queue underflow");
       else{
          n=deq()
          printf("\n the dequed element is: %d\n",n);
          }
        break;
case 3: display();
        break;
case 4:exit(0);
       break;
default:printf("invalid choice");
        break;
}
}
}
void enq(int a)
{
 if (front==-1&&rear==-1)
  {
   front=rear=0;
   queue[rear]=a;
  }
}
int deq()
{
  if(front==rear&&front!=-1)
   {
   int y=front;
   front=rear-1;
   return queue[y];
   }
 else
   int c=front;





