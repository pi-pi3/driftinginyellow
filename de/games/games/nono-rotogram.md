# NoNo! RotoGram!

A game about sliding
=================

## Description

NoNo! RotoGram! is a puzzle game about sliding. Think nonograms + Rubik's cube +
2D. It combines the rotation of a Rubik's cube and the scheme of a nonogram.
The game can be played in one of two modes: normal and color. One only features
black tiles, the other uses multiple colors for different tiles. The game has
built-in levels for the player to play and also features an option for endless
randomized challenges. For the particularly creative players there's also the
built-in level editor with a palette editor.

Also available on Android! To install the apk file, you'll have to enable the 'install apps from foreign sources' option on your device.

## How to play?

- Download the game.
- Follow the install instructions on the page above.
- I recommend you to start playing from built-in levels on normal mode.
- The numbers on top and side are what's called a delta pattern. Let's concentrate on a single row to better understand how the game works.
  - The pattern `1` means there's only a single tile of the given color, but the position is unknown.
  - The pattern `1 1` means there are two tiles in that row, but their positions and the gap between them is unknown.
  - The pattern `2` means there are two tiles and they're next to each other without a gap between them.
  - In color mode the pattern `1 1`, where each `1` has a different color, means thereare two tiles of the specified colors in that row and they may or may not have a gapbetween them.
- Complete the delta pattern both vertically and horizontally to complete a level. Tiles are moved by sliding rows or columns vertically and horizontally. 

## Downloads
Warning: If you’re on linux, you’ll need to download [LÖVE](https://love2d.org/)
too. 

[itch.io](https://pi-pi3.itch.io/nono-rotogram)
