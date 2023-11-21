<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CommercioCategories extends CI_Controller
{
	public $category;
	public function __construct()
	{
		parent::__construct();
		$this->load->model("CategoryModel");
		$this->load->library("converter/currencyconverter");
		$this->load->library("captchalibrary");
	}

	public function index(){
		$data = [
			'page' => [
				'title' => "All Categories",
				'categories' => json_decode($this->CategoryModel->get(), true, 4)
			],
			'menu' => json_decode($this->DashboardControl->menu_options(), 3),
		];

		$data['breadcrumb'] = [
			"Home" => "",
			"All Categories" => "Current"
		];
		$this->load->view("dashboard/categories/list", $data);
	}
	public function new()
	{
		$captcha = $this->captchalibrary->create();
		$data = [
			'page' => [
				'title' => "Add New Product",
				'captcha' => $captcha
			],
			'menu' => json_decode($this->DashboardControl->menu_options(), 3)
		];
		$data['breadcrumb'] = [
			"Home" => "",
			"Categories" => "categories",
			"Create Category" => "Current",
		];
		$this->load->view('dashboard/categories/new', $data);
	}
	public function edit($productId)
	{
		$data = [
			'page' => [
				'title' => "Edit Product"
			],
			'menu' => json_decode($this->DashboardControl->menu_options(), 3)
		];
		$data['breadcrumb'] = [
			"Home" => "",
			"Categories" => "categories",
			"Edit Category" => "Current",
		];
		$data['product'] = $productId;
		$this->load->view('dashboard/categories/edit', $data);
	}
}
