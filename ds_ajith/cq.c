#include<stdio.h>
#include<stdlib.h>
#define MAX20

void display();
void enqueue();
void dequeue();
int queue[MAX],rear=-1,front=-1;
int main()
{
int choice,value;;
while(1)
{
	printf(" 1. enqueue\n 2. dequeue\n 3. display\n 4. exit  \n");
        printf("enter your choice: ");
	scanf("%d",&choice);
	switch(choice)
	{
	case 1:
        printf(:enter the value to be inserted: ");
        scanf("%d",&value);
	enqueue();
	break;

	case 2:
	dequeue();
	break;

	case 3:
	display();
	break;

	case 4:
	exit(0);

	default:
	printf("wrong choice";
	}
}
return 0;
}


void enqueue(int value)
{
if((rear+1)%MAX==front)
printf("overflow\n");
elseif(front==-1&&rear==-1)
{
front=rear=0;
queue[rear]=value;
}
elseif(rear=MAX-1&&front!=0)
{
rear=0;
queue[rear]=value;
}
else
{
rear=(rear+1)%MAX;
}
}


void dequeue()
{
if(front==-1)
printf("underfloe\n");
else
{
int val=queue[front];
if(front==rear)
front=rear=-1;
else if(front==MAX-1)
front=0;
else
front=front+1;
}
printf("ELement deleted:%d",val);
}

void display()
{
int i;
if(front==-1&&rear==-1)
printf("circular queue is empty");
else
{
printf("Circular Queue: ");
for(i=front;i!=rear;i=(i+1)%MAX)
printf("%d",queue[i]);
printf("&D\n",queue[rear]);
}
}
