#include <iostream>
#include <fstream>
// #include <cstdlib>

using namespace std;

int main(){
    // system("pwd");   //linux
    fstream file, file1;
    file.open("uploads/01", ios::in);
    file1.open("compile_dir/02", ios::out);
    if(!file.is_open()){
        // cout << "Fail" << endl;
        return 0;
    }

    while(!file.eof()){
        string st;
        getline(file, st);
        for(size_t i=0; i<st.size()-1; i++){
            if(st[i] == '.')
                file1 << st[i] << "\n";
            else
                file1 << st[i];
        }
        file1 << st[st.size()-1];
    }

    file.close();
    file1.close();
    return 0;
}