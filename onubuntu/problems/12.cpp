#include <stdio.h>

long long getTriangleVal(long long num)
{
  return ((num*(num+1))/2);
}

int getNumOfFact(long long n)
{
  int count=2;
  long long i;
  for(i=2;i<=n/2;i++)
  {
	if (n%i==0)
	  count++;
  }
  return count;
}

int main()
{
  long long i=11603;
  long long tnumber=67309003;
  int numdiv;
  while(1)
  {
	tnumber+=i++;
	numdiv=getNumOfFact(tnumber);
	printf("%lld %lld %d\n",i-1,tnumber,numdiv);
	if(numdiv>500)
	{
	  //printf("lld\n",tnumber);
	  printf("\n\n%lld %d\n",tnumber,numdiv);
	  break;
	}
  }
	
  return 0;
}