
#include <math.h>

typedef unsigned long long vlong;


int isPrime(vlong a)
{
  vlong i;
  if(a%2==0)
  return 0;
  double lim=sqrt(a);
  for(i=3;i<lim;i+=2)
  {
	if(a%i==0)
	{
	  return 0;
	}
  }
  return 1;
}
