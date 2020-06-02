#include <iostream>
#include <string>
#include <clocale>
#include <cstring>
#include <sstream>

using namespace std;

struct Person{
	Person *left;
	char *surname;
	char *organization;
	Person *right;	
};

struct Cities{
	Cities *left;
	char *city;
	Person *pers;
	Cities *right;	
};

Cities *Tree;
string city, surname, organization;

Person* InsertPerson(Person *P, char *val)
{
    if (P == NULL)
    {
        P = (Person*)malloc(sizeof( Person));
        P->surname = strdup(val);       
        P->left =  NULL;    
        P->right = NULL;                
    }
    else if (*(P->surname) > *(val))
        P->right = InsertPerson(P->right, val); 
     else if (*(P->surname) < *(val))
        P->left = InsertPerson(P->left, val);
 
    return P;
}
 
Cities* InsertCities(Cities *cit, char *g, char *f)
{
    if (cit == NULL)
    {
        cit = (Cities*)malloc(sizeof( Cities));        
        cit->city = strdup(g);
        cit->left =  NULL;
        cit->right = NULL;   
        cit->pers =  NULL;                   
        cit->pers = InsertPerson(cit->pers, f);         
    }
    else if (*(cit->city) < *(g)) 
         cit->right = InsertCities(cit->right, g, f); 
    else if (*(cit->city) > *(g))
         cit->left = InsertCities(cit->left, g, f);  
    else 
        cit->pers = InsertPerson(cit->pers, f);
 
    return cit;
}

void PrintPeople(Person *per){
	if (per != NULL){
		PrintPeople (per->right);
		cout<<"     Участники: "<<per->surname<<endl;
		PrintPeople (per->left);
	}
}		

void Print ( Cities *cit){
	cout<<endl;
	if (cit != NULL){
		Print(cit->left);
		cout<<" Город: "<<cit->city<<endl;
		PrintPeople(cit->pers);
		Print (cit->right);		
	}
}

int main(){
	setlocale(0, "");
	Tree = nullptr;
	int com = 0;	
		while (true){	
				cout<<"1. Для продолжения нажмите '1'\n";
				cout<<"2. Для вывода списка нажмите '2'\n";	
				cout<<"3. Для выхода нажмите '3'\n";
				cin>>com;				
			switch(com){				
	            case 1:{
					cout<<" Введите город: "<<endl;
					cin>>city;
					/*Перевожу из string в *char*/				
					char *g = new char;
					strcpy(g, city.c_str());
					/*Перевожу из string в *char*/				
					cout<<" Введите фирму: "<<endl;
					cin>>organization;
					cout<<" Введите фамилию: "<<endl;
					cin>>surname;
					/*Перевожу из string в *char*/
					char *f = new char;
					strcpy(f, surname.c_str());	
					/*Перевожу из string в *char*/				
		  			Tree = InsertCities(Tree, g, f);
					cout<<endl;            	
		            break;
		        }
	            case 2:
					cout<<endl;
					Print(Tree);            	
		        	break;
	            case 3:
					exit(0);
					break;
				default:
					cout<<"Неверная команда!\n";
					break;						            
			}
		}			
	system("pause");	
	return 0;
}
