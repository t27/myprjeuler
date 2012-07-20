#include <stdio.h>
#include <iostream>
#include <fstream>
using namespace std;



long long prod(int a,int b,int c, int d)
{
  return a*b*c*d;
}

long long isMax(long long ansn,long long maxn)
{
  if(ansn>maxn)
	return ansn;
  else
	return maxn;
}
int main()
{
  int n=20;
  int mat[n][n];
  int x, y;
  ifstream isn("matprob11.txt", ios::in | ios::out);

  if (!isn) {
    cout << "Cannot open file.\n";
    return 0;
  }

  for (y = 0; y < 20; y++) {
    for (x = 0; x < 20; x++) {
      isn >> mat[x][y];
    }
  }
  isn.close();
  
  int i,j;
  long long ans,max;
  max=0;
  for(i=3;i<n;i++)//checking |
  {
	for(j=0;j<n;j++)
	{
	  ans=prod(mat[i][j],mat[i-1][j],mat[i-2][j],mat[i-3][j]);
	  max=isMax(ans,max);
	}
  }
  for(i=0;i<n;i++)// checking -
  {
	for(j=3;j<n;j++)
	{
	  ans=prod(mat[i][j],mat[i][j-1],mat[i][j-2],mat[i][j-3]);
	  max=isMax(ans,max);
	}
  }
  for(i=3;i<n;i++)// checking /
  {
	for(j=0;j<n-3;j++)
	{
	  ans=prod(mat[i][j],mat[i-1][j+1],mat[i-2][j+2],mat[i-3][j+3]);
	  max=isMax(ans,max);
	}
  }
  for(i=3;i<n;i++)//checking "\"
  {
	for(j=3;j<n;j++)
	{
	  ans=prod(mat[i][j],mat[i-1][j-1],mat[i-2][j-2],mat[i-3][j-3]);
	  max=isMax(ans,max);
	}
  }
  printf("%lld\n",max);
	  
  return 0;
}