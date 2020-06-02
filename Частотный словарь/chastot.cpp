#include <iostream>
#include <clocale>
#include <stdio.h>
#include <string.h>
#include <string>
#include <sstream>

using namespace std;

struct Word
{
   char word[100];
   int val;
   Word *left;
   Word *right;   
};

Word* Insert(Word* node, char * word)
{
    if (node == nullptr)
    {
        node = new  Word;
        strcpy(node->word, word);
        node->val = 1;         //����� ��� �� ����������� ����� �������� val = 1
        node->left = node->right = nullptr;
        return node;
    }
    int res = strcmp(node->word, word);
    //���� ���������� ����� , �� val +1
    if(res == 0)  node->val++;
    else
    {
        if (res < 0) node->left = Insert(node->left, word);
        else node->right = Insert(node->right, word);
    }

    return node;
}

void Print(Word *node)
{
    if (node != nullptr)
    {
        Print(node->left);
        cout <<"����� - ["<< node->word << "] ����������� " << node->val << " ���(�).\n";
        Print(node->right);
    }
}

Word * MinWord(Word * node)
{
    while (node->left != nullptr)
        node = node->left;
    return node;
}

Word * MaxWord(Word * node)
{
    while (node->right != nullptr)
        node = node->right;
    return node;
}

int main()
{
	setlocale(0,"");
    Word* root = nullptr;
    cout << "������� ����� �� ���������� ����� ����� ������ (enter - ����� �����): \n";
    string s;
    getline(cin, s);
    cout << "���� �����: "<<s<<endl;
	//cout << "����� ����������� = "<<s.length()<<endl;   
	char const *text[] = {s.c_str()};
    char *buff = new char[s.length()+1];
    stringstream ss(*(text));
    // ����������� ���� �� ����� � ������ � ������
    while (ss >> buff)
        root = Insert(root, buff);
    // �����  ���� � ��  ���������� 
    cout<<endl;
    Print(root);
    Word* minWord = MinWord(root);
    std::cout << "Min Word: " << minWord->word << std::endl;

    Word* maxWord = MaxWord(root);
    std::cout << "Max Word: " << maxWord->word << std::endl;    
	delete[] text;
	delete[] buff;
}
