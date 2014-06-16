/*  COSC 3P98, Graphics
 *  Assign 1, Part 2
 *
 *  Dan Lapp
 *  4276804
 *  Oct 10, 2013
 */
#include <iostream>
#include <time.h>
#include "stdafx.h"
#include <stdio.h> 
#include "glut.h" 


/* default cell colours for live and dead cells */
const GLubyte dead_color[] = {102, 102, 102};
const GLubyte alive_color[] = {204, 0, 0};

#define WINDOW_SIZE 600

#define SLOW_SPEED 2000 //milliseconds
#define FAST_SPEED 500 //milliseconds

/* float parameters used to change cell color each iteration */
#define COLOR_MOD_DARKEN 1.2
#define COLOR_MOD_LIGHTEN 0.9

/* cell struct represents an instance of a cell in the game, it is alive or dead and stores a color */
typedef struct cell{
	bool alive; //alive or dead
	GLubyte r, g, b; //colour of cell
};

int grid_size, cell_size; // grid dimensions, size of each cell
bool is_running; // is simulation running
cell **cells; // keeps track of whether cells are alive or dead

/* menu selection integers */
static int init_menu;
static int color_menu;
static int speed_menu;

/* user settings variables */
static bool default_color; //use default cell color or use random
static int mouse_edit; //0=mouse edit off, 1=mouse click sets alive, 2=mouse click kills cell
static bool slow_speed; //use slow speed or not

using namespace std;

//resets all cells to dead. clears screen of all cells
void clear_grid(void)
{
	for(int i = 0; i < grid_size; i++)
		for(int j = 0; j < grid_size; j++)
			cells[i][j].alive = false;
}

void randomize_color() //initializes all cells to have random color
{
	for(int i = 0; i < grid_size; i++)
		for(int j = 0; j < grid_size; j++)
		{
			cells[i][j].r = (GLubyte)rand();
			cells[i][j].g = (GLubyte)rand();
			cells[i][j].b = (GLubyte)rand();
		}
}

/* sets polygon color to default or random color, called before drawing cells[x][y] to set color 
 *  @param x coordinate for cell array
 *  @param y coordinate for cell array
 */
void polygon_color(int x, int y) 
{
	if(cells[x][y].alive == false)
		glColor3ubv(dead_color);
	else if(default_color == true)
		glColor3ubv(alive_color);
	else
		glColor3ub(cells[x][y].r, cells[x][y].g, cells[x][y].b);
}

/* randomly sets all cells to alive or dead. initializes cells for a game
 */
void randomize() 
{
	for(int i = 0; i < grid_size; i++)
		for(int j = 0; j < grid_size; j++)
			if(rand() % 2 == 1)
				cells[i][j].alive = true;
			else
				cells[i][j].alive = false;
}

/* applies neighbor rules to each cell to determine if current cell is alive or dead
 */
void iterate()
{
	int live_neighbors, dead_neighbors; //counts live and dead neighbors for each cell

	for(int i = 0; i < grid_size; i++)//for each cell
		for(int j = 0; j < grid_size; j++)
		{
			live_neighbors = 0;
			dead_neighbors = 0;

			if(!(i-1 < 0) && !(j-1 < 0))// top left neighbor
				if(cells[i-1][j-1].alive)
					live_neighbors++;
				else
					dead_neighbors++;

			if(!(j-1 < 0)) //top neighbor
				if(cells[i][j-1].alive)
					live_neighbors++;
				else
					dead_neighbors++;

			if(!(i+1 >= grid_size) && !(j-1 < 0))// top left neighbor
				if(cells[i+1][j-1].alive)
					live_neighbors++;
				else
					dead_neighbors++;
			
			if(!(i-1 < 0)) //left neighbor
				if(cells[i-1][j].alive)
					live_neighbors++;
				else
					dead_neighbors++;
			
			if(!(i+1 >= grid_size)) //right neighbor
				if(cells[i+1][j].alive)
					live_neighbors++;
				else
					dead_neighbors++;

			if(!(i-1 < 0) && !(j+1 >= grid_size))// bottom left neighbor
				if(cells[i-1][j+1].alive)
					live_neighbors++;
				else
					dead_neighbors++;

			if(!(j+1 >= grid_size)) //bottom neighbor
				if(cells[i][j+1].alive)
					live_neighbors++;
				else
					dead_neighbors++;

			if(!(i+1 >= grid_size) && !(j+1 >= grid_size))// bottom left neighbor
				if(cells[i+1][j+1].alive)
					live_neighbors++;
				else
					dead_neighbors++;

			if(live_neighbors < 2) //dies from underpopulation
				cells[i][j].alive = false;
			else if (live_neighbors > 3) //dies from overpopulation
				cells[i][j].alive = false;
			else if ((live_neighbors == 2 || live_neighbors == 3) && cells[i][j].alive == true) // cell lives on
				cells[i][j].alive = true;
			else if(cells[i][j].alive == false && live_neighbors == 3) // cells with 3 live neighbors become alive
				cells[i][j].alive = true;
			else; //default case

			/* change color of cell based on number of neighbors alive if not using default color
				darkens or lightens color by gamma function based on live neighbors.
				Modified code snippet taken from my assign 1 part 1 gamma filter
			*/
			if(!default_color) 
			{
				float modifier;

				if(live_neighbors == 2)
					modifier = COLOR_MOD_DARKEN;
				else
					modifier = COLOR_MOD_LIGHTEN;

				float red = ((float)cells[i][j].r / 255);
				float green = ((float)cells[i][j].g / 255);
				float blue = ((float)cells[i][j].b / 255);

				int r = 255 * pow(red, modifier);
				int g = 255 * pow(green, modifier);
				int b = 255 * pow(blue, modifier);

				cells[i][j].r = r;
				cells[i][j].g = g;
				cells[i][j].b = b;
			}
								
		}
}

/* draws a square on the screen to represent cells[x][y]. sets color with polygon_color() first
 *  then draws the square. makes the square 1 pixel smaller than cell size to create a border.
 *      @param x coordinate representing current pixel in array
 *      @param y coordinate representing current pixel in array
 */
void draw_polygon(int x, int y)
{
	polygon_color(x, y); //sets polygon colour

    glBegin(GL_POLYGON);
		glVertex2i((x * cell_size)+1, (y * cell_size)+1);
		glVertex2i((x * cell_size) + cell_size - 1, (y * cell_size)+1);
		glVertex2i((x * cell_size) + cell_size - 1, (y * cell_size) + cell_size - 1);
		glVertex2i((x * cell_size) + 1, (y * cell_size) + cell_size - 1);
    glEnd();
    glFlush();
}

/* simple update method to use with glutTimerFunc() in the display method
 */
void update(int arg)
{
	glutPostRedisplay();
}

/* callback method that draws all polygons for the grid. clears screen and draws a square for each cell
 */
void display()
{
	glClear(GL_COLOR_BUFFER_BIT); //clear screen
	for(int i = 0; i < grid_size; i++) //draw a square for every cell
		for(int j = 0; j < grid_size; j++)
			draw_polygon(i, j);
	
	if(is_running) // apply game rules if the simulaton is running
		iterate();

	if(slow_speed) //delay between iterations is either slow or fast speed
		glutTimerFunc(SLOW_SPEED, update, 0);
	else
		glutTimerFunc(FAST_SPEED, update, 0);

	glutSwapBuffers();//copy buffer to display
	
}

/*glut keyboard function*/
void keyboard(unsigned char key, int x, int y) 
{ 
    switch (key) 
    { 
        case 0x1B: //escape
            exit(0); 
            break; 

		case 0x20: //spacebar
			if(is_running == true)
				is_running = false;
			else
				is_running = true;
			break;
    } 
}//keyboard 

/* callback method to handle all glut menu input from user
 */
void menu_choice(int value)
{
	switch(value)
	{
		case 1: //reset
			clear_grid();
			break;

		case 2: // run/stop
			if(is_running)
				is_running = false;
			else
				is_running = true;
			break;

		case 3: //randomize
			randomize();
			randomize_color();
			break;

		case 4: //quit
			exit(0);
			break;

		/** mouse initialize **/
		case 10: //mouse initialize off
			mouse_edit = 0;
			break;
		case 11: //set cell alive on click
			if(!is_running)
				mouse_edit = 1;
			break;
		case 12: //set cell dead on click
			if(!is_running)
				mouse_edit = 2;
			break;

		/* color menu */
		case 20: //default cell color
			default_color = true;
			break;
		case 21: //random cell color
			default_color = false;
			break;

		/* speed menu */
		case 30: //slow speed
			slow_speed = true;
			break;
		case 31: //fast speed
			slow_speed = false;
			break;
	}
	
}

/* callback function that handles mouseclicks. only does anything if the user selects
 * one of the mouse initialize options. will set a cell to alive or dead on click
*/
void mouse(int button, int state, int x, int y)
{
	if(mouse_edit != 0 && !is_running)
	{
		y = grid_size*cell_size - y;

		int i, j;
		i = x/cell_size;
		j = std::ceil(y/(cell_size+1));

		if(button == GLUT_LEFT_BUTTON && state == GLUT_DOWN)
			if(mouse_edit == 1) //set cell alive
				cells[i][j].alive = true;
			else //set cell dead
				cells[i][j].alive = false;
	}
}
 /* create glut menus
  */
void create_menus(void)
{
	//initialize menu
	init_menu = glutCreateMenu(menu_choice);
	glutAddMenuEntry("Mouse Initialize Off", 10);
	glutAddMenuEntry("Set Cell to Alive", 11);
	glutAddMenuEntry("Set Cell to Dead", 12);

    // color select menu
	color_menu = glutCreateMenu(menu_choice);
	glutAddMenuEntry("Default Cell Colour", 20);
	glutAddMenuEntry("Random Cell Colour", 21);

    // speed select menu
	speed_menu = glutCreateMenu(menu_choice);
	glutAddMenuEntry("Slow", 30);
	glutAddMenuEntry("Fast", 31);
      
    //create main menu 
    glutCreateMenu(menu_choice); 
	glutAddMenuEntry("Reset", 1);
	glutAddMenuEntry("Run/Stop", 2);
	glutAddMenuEntry("Randomize", 3);
	glutAddSubMenu("Mouse Initialize", init_menu);
	glutAddSubMenu("Colours", color_menu);
	glutAddSubMenu("Speed", speed_menu);
	glutAddMenuEntry("Quit", 4);
	
    //bind menus to right button
    glutAttachMenu(GLUT_RIGHT_BUTTON); 
}

int main(int argc, char** argv)
{
	// initiate program boolean settings
	is_running = false;
	default_color = true;
	mouse_edit = 0;
	slow_speed = true;

    /* display info for user and wait for input */
	printf("Conway's Game of Life\n\n");
	printf("Input grid size: ");
	cin >> grid_size;

	while(grid_size < 1)
	{
		printf("Enter grid size greater than 0: ");
		cin >> grid_size;
	}

	printf("\nSpace:\t Run/Stop Simulation\n");
	printf("Esc:\t Quit\n");
	printf("Right Click: Menu\n\n");

    /* initialize cell array as a 2d array of cells*/
	cells = new cell*[grid_size];

	for(int i = 0; i < grid_size; i++)
		cells[i] = new cell[grid_size];

	clear_grid(); //initialize all grid entries to dead
	randomize_color(); //initialize all cell colors

	cell_size = WINDOW_SIZE / grid_size; //calculate cell size to be drawn on screen

	glutInit(&argc,argv); 

    glutInitDisplayMode(GLUT_RGB|GLUT_DOUBLE); 
      
    glutInitWindowSize(WINDOW_SIZE, WINDOW_SIZE); 
    glutCreateWindow("Game of Life"); 
    glShadeModel(GL_SMOOTH); 
    glutDisplayFunc(display); 
    glutKeyboardFunc(keyboard); 
    glMatrixMode(GL_PROJECTION); 
    glOrtho(0,WINDOW_SIZE,0,WINDOW_SIZE,0,1); 

	glClearColor(0.2, 0.1, 0.1, 0.0);
  
	create_menus();
	glutMouseFunc(mouse);
	
	srand(time(NULL));//initialize random seed
    glutMainLoop(); 
	return 0;
}

