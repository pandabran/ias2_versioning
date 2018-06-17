/*****************************************************************************
*			GIVEN NA ANG MGA FUNCTIONS AND ANG DETAILS I THINK ENOUGH		 *
*			NA GURO ANG MGA INFORMATION NEEDED? I HOPE MASABTAN RA NINYO 	 *
*			SORRY I AIN'T A GOOD LEADER T_T lol Di ko confident ug C jud	 *
*			BUT I'LL BE CHEERING FOR YOU GUYS! NAA KOY FULL TRUST NINYO!     *
*			ADD FUNCTIONS LANG IF EVER NAAY KUWANG.							 *
* 			          CHAROOOOOT HAHAHA GOODLUCK! :)						 *
*																			 *
*																- Ren		 *
*****************************************************************************/

#include <stdio.h>
#include <conio.h>
#include <stdlib.h>
#include <string.h>

#define MAX_SUBJECTS 4
#define NUM_STUDENTS 20

typedef struct{
	char fName[30];
	char lName[30];
}name;

typedef struct{
	float act[2];
	float ave;
	char subjName[6];
}subject;

typedef struct{
	name studName;
	subject subj[MAX_SUBJECTS];
	int numSubjects;
	float genAve;
}studRecord;
 
typedef struct node{
	studRecord stud;
	struct node* next;
}studList*;

void initializeList(studList *);
void populateList(studList *);
void displayList(studList);
void insertSortedByLastName(studList *, studRecord); /* ASCENDING ORDER */
void insertLast(studList *, student);
void deleteAll(studList *);
void calculateActivityAverage(subject *);
void calculateGeneralAverage(studList *, subject);

int main(void)
{
	
	/* YOUR CODE HERE... */ 
	/* GO PEOPLE KAYA BELS!! */ 
	getch();
	return 0;
}


/****************************** INITIALIZE LIST ****************************/
void initializeList(studList *L)
{
	*L = NULL;
}

/**************************************************************************
*						READ DATA FROM THE FILE							  *
*																		  *
***************************************************************************/
void populateList(studList *L)
{
	// variable declarations
	FILE *fp_firstname, *fp_lastname, *fp_arts1, *fp_arts2, *fp_he1, *fp_he2, *fp_music1, *fp_music2, *fp_pe1, *fp_pe2;
	studRecord stud;
	int i;
	
	// file opening
	fp_firstname = fopen("firstNames.txt", "r");
	fp_lastname = fopen("lastNames.txt", "r");
	fp_arts1 = fopen("arts1.txt", "r");
	fp_arts2 = fopen("arts2.txt", "r");
	fp_he1 = fopen("HE1.txt", "r");
	fp_he2 = fopen("HE2.txt", "r");
	fp_music1 = fopen("Music1.txt", "r");
	fp_music2 = fopen("Music2.txt", "r");
	fp_pe1 = fopen("PE1.txt", "r");
	fp_pe2 = fopen("PE2.txt", "r");
	
	// processing
	if(fp_firstname != NULL && fp_lastname != NULL && fp_arts1 != NULL && fp_arts2 != NULL && fp_he1 != NULL && fp_he2 != NULL & fp_music1 != NULL && fp_music2 != NULL && fp_pe1 != NULL && fp_pe2 != NULL){
		for(i = 0; i < NUM_STUDENTS; i++){
			// initially set the number of subjects to 0
			stud.numSubjects = 0;
			
			// add the name of the student
			fscanf(fp_firstname, "%s", stud.studName.fName);
			fscanf(fp_lastname, "%s", stud.studName.lName);
			
			// add the grades of the student for the first subject and increment the counter
			strcpy(stud.subj[stud.numSubjects].subjName, "Arts");
			fscanf(fp_arts1, "%d", stud.subj[stud.numSubjects].act[0]);
			fscanf(fp_arts2, "%d", stud.subj[stud.numSubjects].act[1]);
			stud.nunSubjects++;
			
			// add the grades of the student for the second subject and increment the counter
			strcpy(stud.subj[stud.numSubjects].subjName, "H.E.");
			fscanf(fp_he1, "%d", stud.subj[stud.numSubjects].act[0]);
			fscanf(fp_he2, "%d", stud.subj[stud.numSubjects].act[1]);
			stud.nunSubjects++;
			
			// add the grades of the student for the third subject and increment the counter
			strcpy(stud.subj[stud.numSubjects].subjName, "Music");
			fscanf(fp_music1, "%d", stud.subj[stud.numSubjects].act[0]);
			fscanf(fp_music2, "%d", stud.subj[stud.numSubjects].act[1]);
			stud.nunSubjects++;
			
			// add the grades of the student for the fourth subject and increment the counter
			strcpy(stud.subj[stud.numSubjects].subjName, "P.E.");
			fscanf(fp_pe1, "%d", stud.subj[stud.numSubjects].act[0]);
			fscanf(fp_pe2, "%d", stud.subj[stud.numSubjects].act[1]);
			stud.nunSubjects++;
			
			// add student to the list through insertSortedByLastName
			insertSortedByLastName(L, stud);
		}
		// close the file pointers
		fclose(fp_firstname);
		fclose(fp_lastname);
		fclose(fp_arts1);
		fclose(fp_arts2);
		fclose(fp_he1);
		fclose(fp_he2);
		fclose(fp_music1);
		fclose(fp_music2);
		fclose(fp_pe1);
		fclose(fp_pe2);
	}else{
		printf("\nError opening files! Please contact the IT department.");
	}
}


/************* DISPLAY ALL THE LIST FOUND INSIDE THE FILE ******************
*										  								   *
*																		   *
****************************************************************************/
void displayList(studList L)
{
	printf("\nID # First Name\tLast Name\t MUSIC\t ARTS\t PE\t HOME ECONOMICS\tFINAL GRADE\n\n");
	for(; L != NULL; L = L->next){
		printf("%d   %-5s\t   %s \t%.1f\t%.1f\t%.1f\t%.1f\t%.2f\n", L->person.id, L->person.fname, L->person.lname, L->person.q1, L->person.q2, L->person.q3, L->person.q4, L->person.average);
	}
		printf("\n--------NOTHING FOLLOWS---------\n");
}

/******************* SORT THE DATA BY ITS LAST NAME ************************/
void insertSortedByLastName(studList *L, studRecord stud)
{
	
}

/****************** INSERT THE DATA SA LAST *********************************
*				IDK IF SA LAST OR FIRST BA, BUT IF YOU WANT					*
*				INSERT FIRST, UMMM PWEDE RA GURO BASTA KAY					*
*				MAGSINABUTAY ANG UBAN FUNCTIONS FOR IT 						*
****************************************************************************/
void insertLast(studList *, student)
{
	
	studList *trav, temp;
	
	temp = (studList)malloc(sizeof(struct node));
	
	if(temp != NULL){
		for(trav = L; *trav != NULL; trav = &(*trav)->next);
		temp->studRecord = studRecord;
		
		temp->next = *trav;
		*trav = temp;
	}else{
		printf("Dynamic Allocation failed!\n");
	}
}

/************************ POPULATING THE LIST *******************************
*						DIRE SAD KA MAG READ FILE							*
*			BUT IF YOU WANT TO SEPERATE IT AND MAKE ANOTHER FUNCTION 		*
*			FOR READ FILE, PWEDE RAKA MAGHIMO 								*
*			DIRE SAD KA MAG COMPUTE SA AVERAGE BUT IF YOU WANT IT SEPERATED *
*			AND E CALL LANG NIMO, YOU CAN DO SO. THEN YOU CALL 				*
*			INSERTSORTED() HERE PUD.										*
*****************************************************************************/
void populateList(studList *L)
{
	
}

/*********************** DELETE ALL DATA ************************************/
void deleteAll(studList *L)
{
	studList temp;
	
	while(*L != NULL){
		temp = *L;
		*L = temp->next;
		free(temp);
	}
	printf("Successfully deleted all records in the list\n");
	system("PAUSE");
}


/****************************************************************************
*				CALCULATE THE AVERAGE BOTH ACTIVITIES IN 					*
*						YOUR ASSIGNED SUBJECT 								*
****************************************************************************/
void calculateActivityAverage(subject *S)
{
	
}


/****************************************************************************
*				CALCULATE ALL THE AVERAGE OF FROM DIFFERENT SUBJECTS 		*
*						 													*
****************************************************************************/
void calculateGeneralAverage(studList *L, subject S)
{
	
}

