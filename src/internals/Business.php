<?php
declare(strict_types=1);

/**
 * ACF_Business_Directory
 *
 * @package   ACF_Business_Directory
 * @author    Zachary Tarvid-Richey <zr.public@gmail.com>
 * @copyright 2023 Zachary Tarvid-Richey
 * @license   GPL 2.0+
 * @link      https://zachuorice.com
 */

namespace ACF_Business_Directory\Internals;

/**
 * Provides a data model around the Business post type and custom fields.
 */
class Business {

	protected ?\WP_Post $_post;
	protected array $_staged_changes;
	protected string $_post_type = 'business';

	/**
		 * Constructs the model using the given post ID.
		 * @param ?int          $post_id        The ID of the post to retrieve data from, if null prepares to create a new post.
		 * @throws ValueError
	*/
	public function __construct( int $post_id = null ) {
		$this->_staged_changes = [
			'post_fields' => [],
			'acf_fields' => []
		];
		if( \is_null( $post_id ) ) {
			$this->_post = null;
		} else {
			$this->_post = \get_post( $post_id );
			if( \is_null( $this->_post ) ) {
				throw new ValueError("Invalid post: " . $post_id);
			}
		}
	}

	protected function _get_data( string $key, bool $is_acf = false, bool $is_repeater = false, array $subkeys = [] ) {
		if( isset( $this->_staged_changes[$key] ) ) {
			return $this->_staged_changes[$key];
		}

		if( \is_null( $this->_post ) ) {
			return '';
		}

		if( !$is_acf && !$is_repeater ) {
			$vars = get_object_vars( $this->_post );
			if( isset( $vars[$key] ) ) {
				return $vars[$key];
			}
		}

		if( $is_acf ) {
			$value = '';
			if( $is_repeater && \have_rows( $key ) ) {
				$value = [];
				while( \have_rows($key) ) {
					\the_row();
					$_value = [];
					foreach( $subkeys as $subkey ) {
						$_value[$subkey] = \get_sub_field( $subkey );
					}
					$value[] = $_value;
				}
			} else {
				$value = \get_field( $key, $this->_post->ID );
			}
			return !is_null( $value ) ? $value : '';
		}

		return '';
	}

	protected function _set_data( string $key, $value, bool $is_acf = false, bool $is_repeater = false ) {
		if( !$is_acf ) {
			$this->_staged_changes['post_fields'][$key] = $value;
		} else {
			$this->_staged_changes['acf_fields'][$key] = $value;
		}
	}

	public function get_id(): int {
		return !is_null( $this->_post ) ? $this->_post->ID : 0;
	}

	/**
		 * Get the title.
		 * @return string
	*/
	public function get_title(): string {
		return $this->_get_data( 'post_title' );
	}

	/**
		 * Set the title.
		 * @param string        $title
	*/
	public function set_title( string $title ) {
		return $this->_set_data( 'post_title', $title );
	}

	/**
		 * Get the status.
		 * @return string
	*/
	public function get_status(): string {
		return $this->_get_data( 'post_status' );
	}

	/**
		 * Set the status.
		 * @param string        $status
	*/
	public function set_status( string $status ) {
		return $this->_set_data( 'post_status', $status );
	}

	/**
		 * Get the slug.
		 * @return string
	*/
	public function get_slug(): string {
		return $this->_get_data( 'post_name' );
	}

	/**
		 * Set the slug.
		 * @param string        $slug
	*/
	public function set_slug( string $slug ) {
		return $this->_set_data( 'post_name', $slug );
	}

	/**
		 * Get the content.
		 * @return string
	*/
	public function get_content(): string {
		return $this->_get_data( 'post_content' );
	}

	/**
		 * Set the content.
		 * @param string        $content
	*/
	public function set_content( string $content ) {
		return $this->_set_data( 'post_content', $content );
	}

	/**
		 * Get the excerpt.
		 * @return string
	*/
	public function get_excerpt(): string {
		return $this->_get_data( 'post_excerpt' );
	}

	/**
		 * Set the excerpt.
		 * @param string        $excerpt
	*/
	public function set_excerpt( string $excerpt ) {
		return $this->_set_data( 'post_excerpt', $excerpt );
	}

	/**
		 * Get the email address.
		 * @return string
	*/
	public function get_email(): string {
		return $this->_get_data( 'email', true );
	}

	/**
		 * Set the email address.
		 * @param string        $email
	*/
	public function set_email( string $email ) {
		return $this->_set_data( 'email', $email, true );
	}

	/**
		 * Get the phone number.
		 * @return string
	*/
	public function get_phone(): string {
		return $this->_get_data( 'phone', true );
	}

	/**
		 * Set the phone number.
		 * @param string        $phone
	*/
	public function set_phone( string $phone ) {
		return $this->_set_data( 'phone', $phone, true );
	}

	/**
		 * Get the website URL.
		 * @return string
	*/
	public function get_website(): string {
		return $this->_get_data( 'website', true );
	}

	/**
		 * Set the website URL.
		 * @param string        $website
	*/
	public function set_website( string $website ) {
		return $this->_set_data( 'website', $website, true );
	}

	/**
		 * Get the address_line_1.
		 * @return string
	*/
	public function get_address_line_1(): string {
		return $this->_get_data( 'address_line_1', true );
	}

	/**
		 * Set the address_line_1.
		 * @param string        $address_line_1
	*/
	public function set_address_line_1( string $address_line_1 ) {
		return $this->_set_data( 'address_line_1', $address_line_1, true );
	}

	/**
		 * Get the address_line_2.
		 * @return string
	*/
	public function get_address_line_2(): string {
		return $this->_get_data( 'address_line_2', true );
	}

	/**
		 * Set the address_line_2.
		 * @param string        $address_line_2
	*/
	public function set_address_line_2( string $address_line_2 ) {
		return $this->_set_data( 'address_line_2', $address_line_2, true );
	}

	/**
		 * Get the city.
		 * @return string
	*/
	public function get_city(): string {
		return $this->_get_data( 'city', true, true );
	}

	/**
		 * Set the city.
		 * @param string        $city
	*/
	public function set_city( string $city ) {
		return $this->_set_data( 'city', $city, true );
	}

	/**
		 * Get the state.
		 * @return string
	*/
	public function get_state( $full_label = false ): string {
		$data = $this->_get_data( 'state', true );

		if( $data == '' ) {
			return $data;
		}

		if( !$full_label ) {
			return $data['value'];
		} else {
			return $data['label'];
		}
	}

	/**
		 * Set the state.
		 * @param string        $state
	*/
	public function set_state( string $state ) {
		return $this->_set_data( 'state', $state, true );
	}

	/**
		 * Get the postcode.
		 * @return string
	*/
	public function get_postcode(): string {
		return $this->_get_data( 'postcode', true );
	}

	/**
		 * Set the postcode.
		 * @param string        $postcode
	*/
	public function set_postcode( string $postcode ) {
		return $this->_set_data( 'postcode', $postcode, true );
	}

	/**
		 * Get the hours.
		 * @return array
	*/
	public function get_hours(): array {
		$data = $this->_get_data( 'hours', true, true,
			[
				'start',
				'end',
				'24_hours',
				'days'
		] );
		return $data == '' ? [] : $data;
	}

	/**
		 * Set the hours.
		 * @param array         $hours
	*/
	public function set_hours( array $hours ) {
		return $this->_set_data( 'hours', $hours, true, true );
	}

	/**
		 * Get the business_location.
		 * @return array
	*/
	public function get_business_location(): ?array {
		$data = $this->_get_data( 'set_business_location', true );
		if( !$data || !is_array($data) ) {
			return null;
		}
		return $data;
	}

	/**
		 * Set the business_location.
		 * @param array         $business_location
	*/
	public function set_business_location( array $business_location ) {
		return $this->_set_data( 'set_business_location', $business_location, true );
	}

	/**
		 * Get the gallery.
		 * @return array
	*/
	public function get_gallery(): ?array {
		$data = $this->_get_data( 'gallery', true );
		if( !$data || !is_array($data) ) {
			return null;
		}
		return $data;
	}

	/**
		 * Set the gallery.
		 * @param array         $gallery
	*/
	public function set_gallery( array $gallery ) {
		return $this->_set_data( 'gallery', $gallery, true );
	}

	/**
		 * Commit the staged changes to the database.
	*/
	public function save(): ?\WP_Error {
		// Basically:
		// 1. Create $data array with [...$builtin_keys, 'meta_input' => ...$non_builtin_keys ]
		// 2. Insert / update post, reinitialize $_post, clear staged changes.
		// 3. Update ACF fields - tracking and returning errors if applicable.
		// 4. Clears any staged ACF changes that succeed.
		$builtin_keys = array(
			'post_author',
			'post_content',
			'post_content_filtered',
			'post_title',
			'post_name',
			'post_excerpt',
			'post_status',
			'post_type',
			'comment_status',
			'ping_status',
			'post_password',
			'to_ping',
			'pinged',
			'post_parent',
			'menu_order',
			'guid',
			'import_id',
			'context',
			'post_date',
			'post_date_gmt',
		);

		$post_data = \array_merge(
			[
				'ID' => \is_null( $this->_post ) ? 0 : $this->_post->ID,
				'post_type' => $this->_post_type
			],
			\array_filter( $this->_staged_changes['post_fields'], function($key) use ($builtin_keys) {
				return \in_array($key, $builtin_keys);
				}, ARRAY_FILTER_USE_KEY ),
			['meta_input' => \array_filter( $this->_staged_changes['post_fields'], function($key) use ($builtin_keys) {
				return !\in_array($key, $builtin_keys);
				}, ARRAY_FILTER_USE_KEY )]
		);

		\abd_log( 'SAVING POST DATA: ' . print_r( $post_data, true ) );

		$post_id = \wp_insert_post( $post_data, true );
		if( \is_wp_error( $post_id ) ) {
			\abd_log( 'INSERT POST ERROR: ' . implode( "\r\n", $post_id->get_error_messages() ) );
			return $post_id;
		}

		\abd_log('POST ID: ' . $post_id);
		$this->_post = \get_post( $post_id );
		$this->_staged_changes['post_fields'] = [];
		\abd_log('CLEARED STAGED POST FIELDS');

		\abd_log('SAVING ACF FIELDS: ' . print_r( $this->_staged_changes['acf_fields'], true ) );
		$errors = [];
		foreach( $this->_staged_changes['acf_fields'] as $key => $value ) {
			$result = \update_field( $key, $value, $this->_post->ID );
			if( !$result ) {
				$errors[] = $key;
			}
		}

		$this->_staged_changes['acf_fields'] = \array_filter( $this->_staged_changes['acf_fields'],
			function( $key ) use ($errors) {
				return \in_array( $key, $errors );
			}, ARRAY_FILTER_USE_KEY
		);

		if( count($errors) > 0 ) {
			$error = new \WP_Error();
			foreach( $errors as $key ) {
				$error->add( 0, 'Failed to update field: ' . $key );
			}
			\abd_log( 'INSERT POST ACF ERROR: ' . implode( "\r\n", $error->get_error_messages() ) );
			return $error;
		} else {
			\abd_log('CLEARED STAGED ACF FIELDS');
		}

		return null;
	}
}
