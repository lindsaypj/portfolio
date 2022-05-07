// Skylines Assignment: SDEV 117
// Author: Patrick Lindsay
// File: favoriteBook.js
// Date: 10/23/21

// This JavaScript file is designed to draw a city skyline by randomly generating buildings

// SPACE NEEDLE OPTIONAL:   // true: Space Needle appears;
const SPACE_NEEDLE = true; // false: No Space Needle

// Create Canvas for drawing
const canvas = document.getElementById("drawSkyline");
let ctx;
if (canvas.getContext) {
    ctx = canvas.getContext('2d');
}

// CONSTANTS
const SPACE_NEEDLE_IMG = document.getElementById("spaceNeedle");
const CANVAS_WIDTH = window.innerWidth;
const CANVAS_HEIGHT = window.innerHeight;
const GROUND_Y_POS = CANVAS_HEIGHT*(0.75)-24;
const GROUND_THICKNESS = 24;
const WATER_HEIGHT = CANVAS_HEIGHT/4;
const WATER_Y_POS = CANVAS_HEIGHT*(0.75);
const TEXT_OFFSET = CANVAS_WIDTH - 195;
const TEXT_HEIGHT = 60;
const BUILD_WIDTH = 81;         // 4 Windows(6px) + 5 equal margins(9px) + 2 6px buffers = Building Width (81px)
const WINDOW_WIDTH = 6;         // _________________
const WINDOW_MARGIN = 9;        // | B[] [] [] []B |   Key: ' ' = margin, 'B' = buffer, '[]' = window
const WINDOW_BUFFER = 6;        // |966 96 96 96 69|   number represents the width in px
const WINDOWS_PER_ROW = 4;
const NUM_BUILDINGS = random(10, 20); // Min: 10 buildings; Max: 20 buildings
const BUILD_MAX_HEIGHT = 240;
const BUILD_MIN_X_POS = BUILD_WIDTH;
const BUILD_MAX_X_POS = CANVAS_WIDTH - BUILD_MIN_X_POS - BUILD_WIDTH;
const SN_HEIGHT = 300; // SN = Space Needle
const SN_X_POS = random(BUILD_MIN_X_POS, BUILD_MAX_X_POS);

// Make canvas take up whole screen
canvas.width = CANVAS_WIDTH;
canvas.height = CANVAS_HEIGHT;

// Function that draws the whole image // CALLED ON PAGE LOAD
function drawSeattle() {
    // Background/Sky
    drawSky();
    // Water (bottom quarter of the screen)
    drawWater();
    // Ground
    drawGround();
    // Seattle Text
    writeSeattle();
    // Draw Buildings
    for (let i = 1; i <= NUM_BUILDINGS; i++) {
        drawBuilding();
    }

    // Draw The Space needle (move clip art image around; I wish I could draw it using path())
    if (SPACE_NEEDLE) { // Can be disabled
        placeSpaceNeedle();
    }
    else {
        hideSpaceNeedle();
    }
}

// Function to Draw Building
function drawBuilding() {
    // Generate random building values
    const BUILD_HEIGHT = random(BUILD_WIDTH, BUILD_MAX_HEIGHT);
    const BUILD_X_POS = random(BUILD_MIN_X_POS, BUILD_MAX_X_POS);
    const BUILD_Y_POS = GROUND_Y_POS - BUILD_HEIGHT + 1; // +1 ensures that the building is touching the ground

    // Draw Building
    ctx.fillStyle = 'rgb(0, 0, 0)';
    ctx.fillRect(BUILD_X_POS, BUILD_Y_POS, BUILD_WIDTH, BUILD_HEIGHT);

    // Draw Windows
    drawWindows(BUILD_X_POS, BUILD_Y_POS, BUILD_HEIGHT);
}

// Function to Draw the Windows for each building
function drawWindows(xStartPos, yStartPos, buildHeight) {
    // Set window color
    ctx.fillStyle = 'rgb(255, 255, 255)';
    // Calculate the number of window rows for the building
    const NUM_ROWS = buildHeight/(WINDOW_WIDTH+WINDOW_MARGIN) - 2; // -2 ensures windows are above ground

    // Initialize Window Y position
    let windowYPos = yStartPos + WINDOW_MARGIN + WINDOW_BUFFER;

    // Draw Window rows
    for (let row = 0; row < NUM_ROWS; row++) {
        // Set Window x position at the beginning of each row
        let windowXPos = xStartPos + WINDOW_MARGIN + WINDOW_BUFFER;
        // Draw Windows in each row
        for (let column = 1; column <= WINDOWS_PER_ROW; column++) {
            ctx.fillRect(windowXPos, windowYPos, WINDOW_WIDTH, WINDOW_WIDTH);
            // Update Window x Position for next column
            windowXPos += WINDOW_WIDTH + WINDOW_MARGIN;
        }
        // Update Window Y Position for next row
        windowYPos += WINDOW_WIDTH + WINDOW_MARGIN;
    }
}

// Function to draw the background/sky
function drawSky() {
    ctx.fillStyle = 'rgb(51, 153, 255)'; // Light blue
    ctx.fillRect(0, 0, CANVAS_WIDTH, CANVAS_HEIGHT);
}

// Function to draw the water
function drawWater() {
    ctx.fillStyle = 'rgb(0, 51, 102)'; // Dark blue
    ctx.fillRect(0, WATER_Y_POS, CANVAS_WIDTH, WATER_HEIGHT);
}

// Function to draw the ground
function drawGround() {
    ctx.fillStyle = 'rgb(0, 0, 0)'; // Black
    ctx.fillRect(0, GROUND_Y_POS, CANVAS_WIDTH, GROUND_THICKNESS);
}

// Function to write "Seattle"
function writeSeattle() {
    ctx.font = '65px serif';
    ctx.fillStyle = 'rgb(255, 255, 255)'; // White
    ctx.fillText('Seattle', TEXT_OFFSET, TEXT_HEIGHT);
}

// Function to Style and Position the Space Needle
function placeSpaceNeedle() {
    // Randomly position the Space Needle on the ground
    SPACE_NEEDLE_IMG.setAttribute("style",
        "position: absolute;" +
        "height:" + SN_HEIGHT + "px;" +
        "right:" + SN_X_POS + "px;" +
        "top:" + (GROUND_Y_POS - SN_HEIGHT + 1) + "px;"
    );
}

// Function to make the space needle image not appear on page
function hideSpaceNeedle() {
    SPACE_NEEDLE_IMG.setAttribute("style", "height: 0px;");
}

// Function to generate a Random number
function random(low, high) {
    return Math.random() * (high - low + 1) + low;
}