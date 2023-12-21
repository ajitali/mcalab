#include <stdio.h>
 
void main()
{
    int i, x, pos, n ,arr[100];
   printf("enter the size of array: ");
    scanf("%d",&n);
   printf("enter the array elements: ");
    printf("\n");
   for(i = 0; i < n; i++)
      {
        scanf("%d",&arr[i]);
      }
 
  
    printf("position of element to be deleted: ");
    scanf("%d",&pos );
 
    
    for(i = pos- 1; i<n ; i++)
        {
        arr[i] = arr[i + 1];
       }
 
    printf(" the updated array: ");
    for(i = 0; i < n-1; i++)
        printf("%d ", arr[i]);
    printf("\n");
 
}
