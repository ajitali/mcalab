#include <stdio.h>
 
void main()
{
    int i, x, pos, n ,arr[100];
   printf("enter the size of array: ");
    scanf("%d",&n);
   printf("enter the array elements: ");
    
   for(i = 0; i < n; i++)
      {
        scanf("%d",&arr[i]);
      }
 
    printf("enter element to be inserted: ");
    scanf("%d",&x);
 
    printf("position at which element is to be inserted: ");
    scanf("%d",&pos );
    n++;
 
    
    for(i = n - 1; i >= pos; i--)
        {
        arr[i] = arr[i - 1];
       }
    arr[pos - 1] = x;
 
    printf(" the updated array: ");
    for(i = 0; i < n; i++)
        printf("%d ", arr[i]);
    printf("\n");
 
}
