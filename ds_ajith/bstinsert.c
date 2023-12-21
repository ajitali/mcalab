#include<stdio.h>
#include<stdlib.h>
int n;
struct node
{
int data;
struct node *right;
struct node *left;
}

struct node *new_node(int x)
{
 struct node *temp;
 temp = malloc(sizeof(struct node));
 temp -> data= x;
 temp -> left= NULL;
 temp -> right= NULL;
return temp;
}

struct node*insert(struct node *root,int x)
{
 if(root==NULL)




