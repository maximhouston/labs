#include <cstdlib>
#include <locale>
#include <iostream>

using namespace std;

struct Node{ 
	int names;
	Node *next;
};

struct Rings { 
	int name; 
	Node *first;
	Node *last;
	Rings *next; 
	Rings *prev; 
} *ring;

int N=0; 

void Push(int n){ 
	N++;
	Rings *temp = new Rings;
	temp->name = n;
	temp->first = NULL;
	temp->last = NULL;
	if(ring){
		temp->next = ring->next;
		temp->prev = ring; 
		ring->next->prev=temp;
		(ring)->next = temp;	
	}
	else{
		temp->prev = temp;
		temp->next = temp;	
	}
	ring = temp;	
}
Rings* FindRing(int element){
	Rings *el = ring; 
	while (el){
		if(el->name == element) break;
		el = el->next;
	}
	return el;
}
void PushAfter(int element, int n){ 
	ring=FindRing(element);
	Push(n);
}
void PushBefore(int element, int n){ 
	N++;
	ring=FindRing(element);
	Rings *temp = new Rings;
	temp->name = n;
	temp->first = NULL;
	temp->last = NULL;
	if(ring){
		temp->prev = ring->prev; 
		temp->next = ring; 
		ring->prev->next=temp;
		(ring)->prev = temp;
	}
	else temp->prev = temp;
	ring = temp;	
}
void Print(Node *elFirst){ 
	Node* el = elFirst;
	while(el>0){
		cout<<el->names<<" ";
		el=el->next;
	}
}
void Print_r(){ 
	Rings* el = ring;
	cout<<"��������: "<<endl;
	for(int i=0; i<N; i++){
		cout<<el->name<<" ";
		Print(el->first);
		el=el->next;
	}
}
void Print_l(){ 
	Rings* el = ring;
	cout<<"��������: "<<endl;	
	for(int i=0; i<N; i++){
		el=el->prev;
		cout<<el->name<<" ";
		Print(el->first);
	}
}
void Pop(int element){ 
	N--;
	Rings *pcur=FindRing(element);
	pcur->next->prev=pcur->prev;
	pcur->prev->next=pcur->next;
	ring=pcur->next;
	delete pcur;
}
void PopBeforeN(int element){ 
	Rings *pcur=FindRing(element);
	pcur=pcur->prev;
	Pop(pcur->name);
}

void PopAfterN(int element){ 
	Rings *pcur=FindRing(element);
	pcur=pcur->next;
	Pop(pcur->name);
}

Node* FindElement(Node * const elFirst, int element){ 
	Node *el = elFirst;
	while (el){
		if(el->names == element)break;
		el = el->next;
	}
	return el;
}
Node* FindPrevFirst(Node * const elFirst, Node* element){ 
	Node *el = elFirst;
	while (el){
		if(el->next == element)break;
		el = el->next;
	}
	return el;
}
Node* CreateRing(int names){ 
	Node *el = new Node;
	el->names = names; 
	el->next = 0;
	return el;
}
void PushFirst(int names){ 
	if(ring->first){
		Node *el = new Node;
		el->names = names;
		el->next = ring->first;
		ring->first = el;		
	}
	else {
		ring->first=CreateRing(names);
		ring->last=ring->first;	
	}		
}
void PushBack(int names){ 
	if(ring->first){
		Node *el = new Node;
		el->names = names;
		el->next = 0;
		ring->last->next = el;
		ring->last = el;		
	}
	else {
		ring->first=CreateRing(names);
		ring->last=ring->first;	
	}
}
void PushAfterN(int element, int names){ 
	Node* find = FindElement(ring->first, element);
	if(find){
		if (find == ring->last) PushBack(names);
		else{
			Node* el = new Node;
			el->names=names;
			el->next=find->next;
			find->next=el;
		}
	}
}
void PushBeforeN(int element, int names){ 
	Node* find=FindElement(ring->first, element);
	if(find){
		if(find == ring->first) PushFirst(names);
		else{
			Node* el = new Node;
			el->next=find;
			el->names=names;
			Node* p = FindPrevFirst(ring->first, find);
			p -> next = el;
		}		
	}
}
void PopElement(int element){ 
	Node* find=FindElement(ring->first, element);
	if(find){
		Node* p = FindPrevFirst(ring->first, find);
		if (find == ring->first) ring->first = (ring->first) -> next;
		else if (find == ring->last) p->next=0;
		else p->next=find->next;
		delete find;
	}
}

void PopAfter(int element){ 
	Node* find=FindElement(ring->first, element);
	if (find->next){
		find=find->next;
		PopElement(find->names);	
	}
}
void PopBefore(int element){ 
	Node* find=FindElement(ring->first, element);
	find=FindPrevFirst(ring->first, find);
	if (find) PopElement(find->names);
}

int main(){
	setlocale (0, "");
	ring = NULL;
	Node *head = NULL;
	int el = 0;
	int pos = 0;
	cout<<"������� �������:\n";
	cin>>el;
	Push(el);
	Print_r();
	int com;
	while (true){
	cout<<"\n��� ������ �������?\n";
	cout<<"1 - �������� ������� � ������ ������\n";
	cout<<"2 - �������� ������� � ����� ������\n";
	cout<<"3 - �������� ������� ����� ������������ ���������\n";	
	cout<<"4 - �������� ������� ����� ������������ ���������\n";	
	cout<<"5 - ������� ������� ����� ������������� �����\n";
	cout<<"6 - ������� ������� ����� ������������ ������\n";
	cout<<"7 - ������� ������������ ������� � ������\n";
	cout<<"8 - ����������� ������ �� ������� �������\n";
	cout<<"9 - ����������� ������ ������ ������� �������\n";		
	cin>>com;
	switch (com){
		case 1:
			cout<<"������� ������� \n";
			cin>>el;
			PushFirst(el);	
			break;
		case 2:
			cout<<"������� ������� \n";
			cin>>el;
			PushBack(el);							
			break;
		case 3:
			cout<<"������� ������� \n";
			cin>>el;
			cout<<"����� ����� ������ ��� ��������?\n";
			cin>>pos;
			PushBefore(pos, el);				
			break;
		case 4:
			cout<<"������� ������� \n";
			cin>>el;
			cout<<"��c�� ������ ����� ��� ��������?\n";
			cin>>pos;
			PushAfter(pos, el);				
			break;
		case 5:
			cout<<"������� �������, ����� �������� ���������� ������� �����\n";
			cin>>el;
			PopAfterN(el);			
			break;
		case 6:
			cout<<"������� �������, ����� ������� ���������� ������� �����\n";
			cin>>el;
			PopBeforeN(el);				
			break;
		case 7:
			cout<<"������� �������, ������� ���������� �������\n";
			cin>>el;			
			PopElement(el);
			break;
		case 8:
			Print_r();
			break;
		case 9:
			Print_l();			
			break;
		default:
			cout<<"�������� �������!\n";
			break;																									
	}
}
}

