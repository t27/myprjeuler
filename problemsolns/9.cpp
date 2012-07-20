#include <stdio.h>


int isPythTrip(int a,int b,int c)
{
  if( ((a*a + b*b) == (c*c)) || ((c*c + b*b) == (a*a)) ||((a*a + c*c) == (b*b)) )
	return 1;
  else
	return 0;
}

int main()
{
  int i,j,k;
  for(i=998;i>0;i--)
  {
	for(j=1;j<999-i;j++)
	{
	  k=1000-j-i;
	  if(isPythTrip(i,j,k))
		 {
		   printf("%d %d %d",i,j,k); 
		   return 0;
		 }
	  else
		printf(".");
	}
  }
return 0;
}