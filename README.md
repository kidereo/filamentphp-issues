## About this repository

This repository illustrates two bugs in FilamentPHP (v3.1.21) which worked in previous versions of the framework:

- The `wrap()` column method no longer functions.
- The `default()` and `listWithLineBreaks()` column methods no longer work together. They do work individually but produce `Undefined variable $listLimit` error when both enabled on the same column.
