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

typedef struct{
	char fName[30];
	char lName[30];
}name;

typedef struct{
	float act[2];
	float ave;
	char subjName[15];
}subject;

typedef struct{
	name studName;
	subject subj[15];
	float genAve;
}stud;

typedef struct node{
	stud studRecord;
	struct node* next;
}studList*;

void initializeList(studList *);
void populateList(studList *);
void displayList(studList);
void insertSortedByLastName(studList *, name); /* ASCENDING ORDER */
void insertLast(studList *, student);
void deleteAll(studList *);
void calculateActivityAverage(subject *);
void calculateGeneralAverage(studList *, subject);

int main(void){
	
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
void populateListLastName(studList *L){
	
}


/************* DISPLAY ALL THE LIST FOUND INSIDE THE FILE ******************
*										  								   *
*																		   *
****************************************************************************/
void displayList(studList L){
	
}

/******************* SORT THE DATA BY ITS LAST NAME ************************/
void insertSortedByLastName(studList *, name){
	
}

/****************** INSERT THE DATA SA LAST *********************************
*				IDK IF SA LAST OR FIRST BA, BUT IF YOU WANT					*
*				INSERT FIRST, UMMM PWEDE RA GURO BASTA KAY					*
*				MAGSINABUTAY ANG UBAN FUNCTIONS FOR IT 						*
****************************************************************************/
void insertLast(studList *, student){
	
}

/************************ POPULATING THE LIST *******************************
*						DIRE SAD KA MAG READ FILE							*
*			BUT IF YOU WANT TO SEPERATE IT AND MAKE ANOTHER FUNCTION 		*
*					FOR READ FILE, PWEDE RAKA MAGHIMO 						*
*****************************************************************************/
void populateList(studList *L){
	
}

/*********************** DELETE ALL DATA ************************************/
void deleteAll(studList *L){
	
}


/****************************************************************************
*				CALCULATE THE AVERAGE BOTH ACTIVITIES IN 					*
*						YOUR ASSIGNED SUBJECT 								*
****************************************************************************/
void calculateActivityAverage(subject *S){
	
}


/****************************************************************************
*				CALCULATE ALL THE AVERAGE OF FROM DIFFERENT SUBJECTS 		*
*						 													*
****************************************************************************/

void calculateGeneralAverage(studList *L, subject S){
	
}

