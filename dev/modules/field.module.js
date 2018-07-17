'use strict';
module.exports = class Field {
	name;
	value = '';
	_label = '';
	_type = 'text';
	_help = '';

	set label(value) {
		this._label = value;
	}

	set type(value) {
		this._type = value;
	}

	set help(value) {
		this._help = value;
	}

	constructor(name, value) {
		this.name = name;
		this.value = value;
	}

	get label() {
		return this._label;
	}

	get type() {
		return this._type;
	}

	get help() {
		return this._help;
	}
};