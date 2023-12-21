#include<stdio.h>
#include<stdlib.h>
int queue[20];
int size=5;
int rear=-1;
int front=-1;
int IsEmpty();
int IsFull();
void display();
void enqueue();
int dequeue();

void main()
{
int input;
while(1)
{
	printf("enter 1 to enqueue,2 to dequeue,3 to display,4 to exit  ");
	scanf("%d",&input);
	switch(input)
	{
	case 1:
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
	break;
	}
}
}

int IsEmpty()
{
if(rear==front)
return 1;
return0;
}

int IsFull()
{
if(rear==size-1)
return 1;
return 0;
}

void enqueue()
{
if(IsFull())
{
printf("overflow\n");
return;
}
rear++;
printf("enter element to be inserted: ");
scanf("%d",&queue[rear]);
display();
}

int dequeue()
{
if(IsEmpty())
{
printf("underfloe\n");
return 0;
}
int val;
val=queue[front];
front++;
display();
return val;
}

void display()
{
printf("Queue: ");
for(int i=front+1;i<=rear;i++)
printf("%d",queue[i]);
printf("\n");
}































