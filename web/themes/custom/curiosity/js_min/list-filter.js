!function(n){var a=n(".searchbox"),o=n(".teaser");a.on("input",(function(){var a=n(this).val();o.show().unmark(),a&&o.mark(a,{done:function(){o.not(":has(mark)").hide()}})}))}(jQuery);