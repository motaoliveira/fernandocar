
int horizons, verticaliz;

void setup(){

  
size(screen.width,240,P3D); 
  colorMode(RGB);
  noCursor();
  
}

void draw(){
background(mouseX, mouseY, mouseX);
fill();
ellipse(mouseX, mouseY, 55, 55);
//println(mouseX);
}  
void touchMove(TouchEvent touchEvent) {
  noStroke();
  fill(255);
  rect(100, 100, 400, 300);
}
