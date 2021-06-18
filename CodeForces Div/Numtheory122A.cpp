#include<iostream>
using namespace std;
int main()
{
    int n;
    cin>>n;

    if(n%10==4 || 7)
        cout<<"YES";

    else if(n/4==0)
        cout<<"YES";
    else if(n/7==0)
        cout<<"YES";
    else
        cout<<"NO";

}
