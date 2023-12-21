#include<stdio.h>
#include<stdlib.h>

struct node
{
int data;
struct node *left;
struct node *right;
};

struct node *head = NULL;
int isEmpty = 1;

int insert();
int display();
void main()
{
while (1) {
	int choice;
	printf("Enter 0 to display, 1 to insert, 4 to exit");
	scanf("%d",&choice);
	switch(choice) {
	case 0:
		display();
		break;
	case 1:
		insert();
		break;
	case 4:
		exit(0);
	}
}

}











int insert()
{
int value;
struct node *newnode, *temp;
printf("Element: ");
scanf("%d", &value);
newnode = (struct node *) malloc(sizeof(struct node));
newnode->data = value;
newnode->left = NULL;
newnode->right = NULL;

if (isEmpty) {
head = newnode;
isEmpty = 0;
return 0;
}

temp = head;
while (temp != NULL) {
if (temp->data > value) {
if (temp->left==NULL) {
temp->left= newnode;
return 0;
}
temp = temp->left;
}
else {
if (temp->right ==NULL) {
temp->right = newnode;
return 0;
}
temp = temp->right;
}
}
return 0;
}


int display() {
if (head == NULL) {
printf("Tree is empty!!\n");
return 1;
}

int preOrder(struct node *root)
{
if (root == NULL)
return 1;
printf("%d -> ", root->data);
preOrder(root->left);
preOrder(root->right);
}

int inOrder(struct node *root)
{
if (root == NULL)
return 1;
inOrder(root->left);
printf("%d ->", root->data);
inOrder(root->right);
}

int postOrder(struct node *root)
{
if (root == NULL)
return 1;
postOrder(root->left);
postOrder(root->right);
printf("%d ->", root->data);
}

printf(" Preorder: ");
preOrder(head);
printf("Inorder: ");
inOrder(head);
printf(" Postorder: ");
postOrder(head);
printf("\n");
return 0;
}








