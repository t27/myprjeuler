#include <stdio.h>

int isPal(long num)
{
	long rev=0;
	long n;
	n=num;
	while(n!=0)
	{
		rev=rev*10+n%10;
		n/=10;
	}
	if(rev==num)
		return 1;
	else return 0;
}

int main(int argc, char const *argv[])
{
	int i,j;
	long prod;
	for(i=999;i>0;i--)
	{
		for (int j = 999; j>0; j--)
		{
			prod=i*j;
			if(isPal(prod))
			{
				printf("%dX%d=%ld\n",i,j,prod );
				break;
			}
		}
	}
	// long n;
	// scanf("%ld",&n);
	// printf("%d",isPal(n));
	return 0;
}

