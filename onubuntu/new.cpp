#include <stdio.h>
#include <iostream>
#include <fstream>
using namespace std;

int main()
{
  int mat[20][20];
  int x, y;
  ifstream isn("mat.txt", ios::in | ios::out);

  if (!isn) {
    cout << "Cannot open file.\n";
    return 0;
  }

  for (y = 0; y < 20; y++) {
    for (x = 0; x < 20; x++) {
      isn >> mat[x][y];
    }
  }
  
  for (y = 0; y < 20; y++) {
    for (x = 0; x < 20; x++) {
      cout<<mat[x][y]<<" ";
    }
    cout<<endl;
  }
  isn.close();

  return 0;
}