#include <stdio.h>
#include <math.h>
//find 10001st prime
//find nth prime
typedef unsigned long long vlong;

int isPrime(vlong a)
{
  vlong i;
  if (a==2)
	return 1;
  else if(a%2==0)
  return 0;
  //long double lim=sqrt(a);
  for(i=3;i<a/2;i+=2)
  {
	if(a%i==0)
	{
	  return 0;
	}
  }
  return 1;
}	  

int main()
{
  vlong n=0;
  vlong i;
  //int num=2000000;
  for(i=2;i<2000000;i++)
  {
	//printf("%llu\n",i);
	if(isPrime(i))
	  n+=i;
	
  }
  printf("%llu %llu",i,n);

  return 0;
}