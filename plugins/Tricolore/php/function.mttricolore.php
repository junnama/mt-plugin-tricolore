<?php
function smarty_function_mttricolore( $args, &$ctx ) {
    $img = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPAAAACgAgMAAABPtQn2AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAACVBMVEUAI5X////tKTkDtutPAAAAAWJLR0QB/wIt3gAAAAlwSFlzAAALEwAACxMBAJqcGAAAADtJREFUaN7tyzEBAAAIA6CVtKQpLbAAHvCTFFNsEVmWZVmWZVmWZVmWZVmWZVmWZVmWZVmWZVmWZflrPrlvdDXqFZw0AAAAAElFTkSuQmCC';
    if ( isset( $args[ 'raw' ] ) ) {
        if ( $args[ 'raw' ] ) {
            return $img;
        }
    }
    if ( isset( $args[ 'width' ] ) ) {
        if ( $args[ 'width' ] ) {
            $width = $args[ 'width' ];
        }
    }
    if ( isset( $args[ 'height' ] ) ) {
        if ( $args[ 'height' ] ) {
            $height = $args[ 'height' ];
        }
    }
    if ( isset( $args[ 'alt' ] ) ) {
        if ( $args[ 'alt' ] ) {
            $alt = $args[ 'alt' ];
        }
    }
    if ( isset( $args[ 'xhtml' ] ) ) {
        if ( $args[ 'xhtml' ] ) {
            $xhtml = ' /';
        }
    }
    if (! $width ) $width = 240;
    if (! $height ) $height = 160;
    if (! $alt ) $alt = 'Tricolore';
    $tag = "<img src=\"${img}\" alt=\"${alt}\" width=\"${width}\" height=\"${height}\"${xhtml}>";
    return $tag;
}
?>