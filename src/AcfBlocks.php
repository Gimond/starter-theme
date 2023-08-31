<?php

use Timber\Site;

class AcfBlocks extends Site {
	public function __construct() {
		parent::__construct();
	}

    public function register_blocks() {
        // Register a new block.
		acf_register_block([
			'name' => 'example_block',
			'title' => __('Example Block', 'your-text-domain'),
			'description' => __('A custom example block.', 'your-text-domain'),
			'render_callback' => 'my_acf_block_render_callback',
			'category' => 'formatting',
			'icon' => 'admin-comments',
			'keywords' => ['example'],
		]);
    }
}