# Particle Shift

My Ludum Dare 35 compo submission
=================

## Description
It's a minimalistic puzzle platformer. Your goal is to get to the blue thing.
That's it. However, the levels shift as you move around. Use A and D to navigate
and SPACE to jump. Press R to reset the level.

If you're having trouble with a level, press the right arrow to skip it.

## Guide to tiles (yes, they're tiles)
- Brown - Static Tiles, guaranteed to never shift
- Green/Cyan - Dynamic Tiles, can shift their position
- Red - Death Tiles. As the name suggests, they kill you.

## Entities

- Red/White - The Player. It moves. It jumps. It can activate new level states.
- White - Box, affected by gravity, you can move it. It can also activate other entities. They collide with you, other boxes and all tiles.
- Iron Man-colored - Activator. Can activate level states otherwise unaccessible.
- Blue - Level End. Loads the next level.
- Pink - Teleporter. Teleports you or the Box.

## Notes

- Dynamic Tiles will only collide with you when they're not moving. If they're moving only on the x-axis, they'll collide with you on the y-axis (i.e. when you're falling or jumping) and vice versa.
- The Red Tiles can kill you when they're moving. So if you don't now what killed, it's probably them. Try to repeat your steps slowly and watch as the red tiles move.
- The Box CAN load the next level and it WILL collide the same way the player collides.
- Dynamic Tiles interpolated position isn't based on time, but on your position. For example, in the first level if you're standing x = 5.5, they'll be halfway between their state-0 and state-1 positions. But the Activators will move the Dynamic Tiles over time (about a second). 

## Development
This game was made for Ludum Dare 35 compo in 48 hours.

## Downloads
This game requires OpenGL 3.3 support and Java 8.

[itch.io](https://pi-pi3.itch.io/particle-shift)
